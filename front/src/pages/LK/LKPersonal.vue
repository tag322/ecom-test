<template>

<div class="main">

<div class="content">

    <div class="breadcrumb-with-title">

        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/">Каталог</a></li>
            <li><span>Ламинат</span></li>
        </ul>

        <a href="/" class="breadcrumb-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-src="../img/ico/arrow.svg" class="svg replaced-svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M20 11.7456L14.343 6L12.929 7.3274L16.172 10.6106L4 10.6106L4 12.7471L16.172 12.7471L12.929 16.3969L14.343 18L20 11.7456Z" fill="#171717"></path>
</svg>
        </a>

        <h1 class="title-normal">Персональные данные</h1>

    </div>

    <div class="lk-main-grid">
        <lk-side-menu></lk-side-menu>
        <div class="lk-main-content">

            <div class="lk-widget js-form-validate">
                <form action="">
                    <h5 class="title-margin">Контактные данные</h5>
                    <div class="lk-personal-inputs">

                        <label class="input">
                            <span class="input-field">
                                <input placeholder=" " type="text" value="" name="">
                                <span class="input-label">Фамилия</span>
                            <div class="reset-field"></div></span>
                            <div class="input-hint" style="	"></div>

                        </label>

                        <label class="input required">
                            <span class="input-field">
                                <input placeholder=" " type="text" value="" name="">
                                <span class="input-label">Имя*</span>
                            <div class="reset-field"></div></span>
                            <div class="input-hint" style="	"></div>

                        </label>

                        <label class="input">
                            <span class="input-field">
                                <input placeholder=" " type="text" value="" name="">
                                <span class="input-label">Отчество</span>
                            <div class="reset-field"></div></span>
                            <div class="input-hint" style="	"></div>

                        </label>

                        <label class="input required">
                            <span class="input-field">
                                <input placeholder=" " type="email" value="" name="">
                                <span class="input-label">E-mail*</span>
                            <div class="reset-field"></div></span>
                            <div class="input-hint" style="	"></div>

                        </label>

                        <label class="input required">
                            <span class="input-field">
                                <input placeholder=" " type="tel" value="" name="">
                                <span class="input-label">Телефон*</span>
                            <div class="reset-field"></div></span>
                            <div class="input-hint" style="	"></div>

                        </label>

                    </div>

                    <button class="btn js-form-validate-btn disabled">Сохранить изменения</button>
                </form>
            </div>

            <div class="lk-widget js-form-validate">
                <form action="">
                    <h5 class="title-margin">Контактные данные</h5>

                    <label class="input required">
                        <span class="input-field">
                            <input placeholder=" " type="password" value="" name="">
                            <span class="input-label">Новый пароль*</span>
                        <div class="reset-field"></div></span>
                        <div class="input-hint" style="	"></div>

                    </label>

                    <label class="input required">
                        <span class="input-field">
                            <input placeholder=" " type="password" value="" name="">
                            <span class="input-label">Новый пароль ещё раз*</span>
                        <div class="reset-field"></div></span>
                        <div class="input-hint" style="	"></div>

                    </label>

                    <button class="btn js-form-validate-btn disabled">Сохранить изменения</button>
                </form>
            </div>

        </div>
    </div>

</div>

</div>

</template>

<script>
import LkSideMenu from './LkSideMenu'

export default {
    components: {
        LkSideMenu
    }
}
</script>

<style>

</style>