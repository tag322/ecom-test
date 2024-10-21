jQuery(function ($) {
	if ($('#contact-map').length > 0) {
		init_ymap_script();
	}
});


function init_ymap_script() {
	//todo сделать API ключ
	let elem = document.createElement('script');
	elem.type = 'text/javascript';
	elem.className = 'js-ymap-script';
	elem.async = 'true';
	elem.src = 'https://api-maps.yandex.ru/2.1/?lang=ru-RU&onload=getYaMap&apikey=2c5f0b7b-a735-4237-9221-111522d92ba7';
	document.getElementsByTagName('body')[0].appendChild(elem);
}

function getYaMap() {
	let myMap, objectManager;
	let myGeoObjects = [];

	if ($('.js-ymap-script').length == 0) {
		init_ymap_script();
	} else {
		ymaps.ready(function () {
			ymap_init('contact-map')
			ymap_init('contact-map2')
		});
	}


	function ymap_init(id) {
		let map_block = $('#' + id);

		map_block.addClass('init');

		if (map_block.length <= 0) {
			return false;
		}

		myMap = new ymaps.Map(id, {
			center: [0, 0],
			zoom: 11,
			//controls: []
		}, {
			searchControlProvider: 'yandex#search',
			maxZoom: 16,
		});
		objectManager = new ymaps.ObjectManager({
			// Чтобы метки начали кластеризоваться, выставляем опцию.
			clusterize: false,
			clusterHasBalloon: false,
			geoObjectOpenBalloonOnClick: true,
			clusterOpenBalloonOnClick: false,
			gridSize: 256
		});


		myMap.behaviors.disable(['scrollZoom']);

		myMap.geoObjects.add(objectManager);

		mapItemRefresh(map_block.attr('data-template-path'), map_block);

	}


	const mapItemRefresh = (template_path, map_block) => {


		myGeoObjects = [];
		myMap.geoObjects.removeAll();

		let coord = map_block.attr('data-coord').split(","),
			text = map_block.attr('data-name')

		let placemark = new ymaps.Placemark([coord[0], coord[1]], {
			balloonContent: text,
		}, {
			iconLayout: 'default#image',
			balloonPanelMaxMapArea: 0,
			iconImageHref: template_path + "/img/ico/placeholder.svg",
			iconImageSize: [28, 38],
			iconImageOffset: [-14, -38]
		});
		myGeoObjects.push(placemark)


		myGeoObjects.forEach(item => {
			myMap.geoObjects.add(item);
		})

		myMap.setCenter(coord);
		myMap.setZoom(14);

		//ymaps.geoQuery(myGeoObjects).applyBoundsToMap(myMap);  //делаем масштаб
	}


}

