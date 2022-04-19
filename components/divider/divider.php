<div class="h-divider">
    <div class="shadow"></div>
</div>

<style>
    .h-divider {
        margin: 80px auto 40px;
        width: 80%;
        position: relative;
    }
    .h-divider .shadow {
        overflow: hidden;
        height: 20px;
    }
    .h-divider .shadow:after {
        content: '';
        display: block;
        margin: -25px auto 0;
        width: 100%;
        height: 25px;
        border-radius: 125px/12px;
        box-shadow: 0 0 8px black;
    }
</style>