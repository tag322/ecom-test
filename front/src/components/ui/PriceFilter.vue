<template>
    <div id='filter_price_upper' class="catalog-filter-accordion js-accordion">
        <div class="catalog-filter-accordion__head js-accordion-head">
            <div class="catalog-filter-accordion__head__name">Стоимость</div>
            <!-- <button type="button" id="testbtn" @click="aboba">a</button> -->


            <img alt="" class="svg catalog-filter-accordion__head__arrow" src="../../img/ico/caret-down.svg">
        </div>

        <div id='filter_price_body' class="catalog-filter-accordion__body js-accordion-body">
            <div class="filter-itm__content">
                <div class="range-input-container">
                    <div class="range-input-block">
                        <label id="price-from">от</label>
                        <input class="range-input-aboba before" type="text" v-model="minpriceselected" @blur="checkvaluemin(); updatePriceArr()" :placeholder="'от' + [[ minpriceselected ]]">
                        
                    </div>
                    <div class="range-input-block">
                        <span id="price-to">до</span>
                        <input class="range-input-aboba after" type="text"  v-model="maxpriceselected" @blur="checkvaluemax(); updatePriceArr()" >
                        
                    </div>
                </div>
                <button id="btn-price" @click="applyprice" type="button">Применить</button>
                <div class="clear"></div>
                <div style="display:none" class="range-select" :data-max="pricelimits[1]" :data-min="pricelimits[0]"></div>
            </div>
        </div>
    </div>
</template>

<script>


export default {
    props: {
        pricelimits: Array,
    },
    data() {
        return {
            maxpriceselected: 0,
            minpriceselected: 100000,

            priceArr: []
        }
    },
    methods: {
        setPrices() {

            if(this.$route.query.price != undefined) {
                this.maxpriceselected = this.$route.query.price.split('-')[1]
                this.minpriceselected = this.$route.query.price.split('-')[0]
            } else {
                this.maxpriceselected = this.pricelimits[1]
                this.minpriceselected = this.pricelimits[0]
            }
 
            

            // let abeba = document.getElementById('abeba')
            // abeba.setAttribute('placeholder', 'abobus')

            // let nig = document.getElementById('nig')

            // let clear = document.createElement('div')
            // clear.setAttribute('class', 'clear')
            // nig.appendChild(clear)

            // let nig_elem = document.createElement('div')
            // nig_elem.setAttribute('class', 'range-select')
            // nig_elem.setAttribute('data-max', this.pricelimits[1])
            // nig_elem.setAttribute('data-min', this.pricelimits[0])
            // nig.appendChild(nig_elem)

            // let rangemin = document.getElementById('rangemin')
            
            // let rangemin_input = document.createElement('input')
            // rangemin_input.setAttribute('id', 'rangemininput')
            // rangemin_input.setAttribute('ref', 'rangemininput')
            // rangemin_input.setAttribute('class', 'range-input before')
            // rangemin_input.setAttribute('value', this.minpriceselected)

            // rangemin.appendChild(rangemin_input)

            // let rangemax = document.getElementById('rangemax')
            
            // let rangemax_input = document.createElement('input')
            // rangemax_input.setAttribute('id', 'rangemaxinput')
            // rangemax_input.setAttribute('class', 'range-input after')
            // rangemax_input.setAttribute('value', this.maxpriceselected)

            // rangemax.appendChild(rangemax_input)



            // let aboba = document.createElement('script')
            // aboba.setAttribute('src', '/js/lib.js')
            // aboba.setAttribute('type', 'text/javascript')
            // document.body.appendChild(aboba)

            
            // let aboba1 = document.createElement('script')
            // aboba1.setAttribute('src', '/js/all.js')
            // aboba1.setAttribute('type', 'text/javascript')
            // document.body.appendChild(aboba1)


            // document.getElementById('rangemininput').addEventListener("input", function() {
                
            //     this.minpriceselected = document.getElementById('rangemininput').value
            //     console.log(this.minpriceselected)
            // })

            // document.getElementById('rangemaxinput').addEventListener("input", function() {
                
            //     this.maxpriceselected = document.getElementById('rangemaxinput').value
            //     console.log(this.maxpriceselected)
            // })
            
            // let aboba1 = document.createElement('script')
            // aboba1.setAttribute('src', '/js/all.js')
            // document.head.appendChild(aboba1)
        },

        checkvaluemax() {
            
            if(Number(this.maxpriceselected) < Number(this.minpriceselected)) {
                // this.maxpriceselected = Number(this.minpriceselected)+1 
                this.minpriceselected = [this.maxpriceselected, this.maxpriceselected = this.minpriceselected][0]
                
                
            }
            if(Number(this.maxpriceselected) > Number(this.pricelimits[1])) {
                this.maxpriceselected = this.pricelimits[1]
            }

            this.lastmaxprice = this.maxpriceselected
        },
        checkvaluemin() {
            if(Number(this.minpriceselected) > Number(this.maxpriceselected)) {
                this.maxpriceselected = [this.minpriceselected, this.minpriceselected = this.maxpriceselected][0]
            }
            if(Number(this.minpriceselected) < Number(this.pricelimits[0])) {
                this.minpriceselected = this.pricelimits[0]
            }

            this.lastminprice = this.minpriceselected
        },
        updatePriceArr() {
            
        },
        applyprice() {
            setTimeout(() => {
                this.$emit('priceselect', [this.minpriceselected, this.maxpriceselected])
            }, 1000)   
        }
    },
    watch: {
        pricelimits() {
            window.addEventListener("load", this.setPrices())          
        },
        minpriceselected() {
                        
        }
    },
    updated() {

    }

}
</script>

<style>
.range-input-aboba {
    width: 100%;
    text-align: center;
    font-size: var(--fs-presmall);
    font-weight: 500;
    padding: .5rem .25rem;
    background: #fff;
    height: 2rem;
    border-radius: .25rem;
    border: 1px solid var(--V2-Grey-Mid, #B7BABE);
    
}
#price-from {
    width: 100%;
    text-align: center;
    display: block;
}
#price-to {
    width: 100%;
    text-align: center;
    display: block;
}
#btn-price {
    display: block;
    width: 100%;
    align-items: center;
    justify-content: center;
    text-align: center;
    cursor: pointer;
    text-decoration: none;
    min-height: 2.5rem;
    color: #fff;
    border: 2px solid rgb(245 51 63);
    background: rgb(245 51 63);
    padding: .25rem 1rem;
    border-radius: .25rem;
    font-weight: 500;
    transition: all .2s;
    font-size: 1rem;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}
</style>