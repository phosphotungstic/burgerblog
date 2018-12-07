<template>
<div class="flex-container">
    <div class="burger">
    <div class="top bun">
        <div class="menu-name">Menu</div>
    </div>
    <div class="burgerlink">
        <a href="">home</a>
    </div>
    <div class="lettuce"></div>
    <div class="burgerlink">
        <a href="">reviews</a>
    </div>
    <div class="tomato"></div>
    <div class="burgerlink">
        <a href="">cooking</a>
    </div>
    <div class="meat"></div>
    <div class="burgerlink">
        <a href="">about</a>
    </div>
    <div class="bottom bun"></div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style lang="scss" scoped>
    .flex-container {
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        align-items: center;
    }

    .menu-name {
        color: #e3d2a9;
        text-align: center;
        letter-spacing: 2x;
    }

    .burger {
        max-width: 90px;
    }

    .burger:hover *{
        margin: 0 0.5em 0.5em 0;
        transition: margin 2000ms;
    }

    .burger:hover .burgerlink{
        display: block;
        transition: display 2000ms;
    }

    .bun {
        height: 25px;
        width: 90px;
        background: #a77932	;
        display: block;
    }

    %innard {
        height: 15px;
        width: 90px;
        display: block;
    }

    .tomato {
        @extend %innard;
        background: red;
    }

    .lettuce {
        @extend %innard;
        background: green;
    }

    .meat {
        @extend %innard;
        background: #2B1805;
    }

    .top {
        border-top-left-radius: 90px;
        border-top-right-radius: 90px;
    }

    .bottom {
        border-bottom-left-radius: 90px;
        border-bottom-right-radius: 90px;
    }

    .burgerlink {
        display:none;
        text-align: center;
    }

    .burgerlink a {
        color: black;
        text-decoration: none;
    }
</style>
