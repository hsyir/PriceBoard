<template>
    <div class="row">
        <div v-for="category in categories" class="col-md-2  p-0">
            <div class="  rounded h-100 p-1 ">
                <h3 class="text-center rounded p-3" :style="{backgroundColor:category.color2,color:'white'}">
                    {{ category.name }}</h3>
                <div v-for="product in category.products">
                    <div class="  rounded p-1 h-100  m-1 position-relative " :style="{backgroundColor:category.color}">
                        <div class="discount-percent " v-if="product.discount_percent">
                            <span>{{ product.discount_percent}}% تخفیف</span>
                        </div>
                        <div class="text-primary product-name p-1 h1 " :style="product_style.name_style">
                            {{ product.name }}
                        </div>
                        <div class="text-danger product-price p-1 h2 mt-3 " :style="product_style.price_style">
                            {{ product.price.toLocaleString() }} تومان
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--        <div v-for="product in prices" class="col-md-2  p-1">
                    <div class=" border rounded p-1 h-100">
                        <div class="text-primary product-name p-1 h1" :style="product_style.name_style">
                            {{ product.name }}
                        </div>
                        <div class="text-danger product-price p-1 h2 mt-3" :style="product_style.price_style">
                            {{ product.price.toLocaleString() }} تومان
                        </div>
                    </div>
                </div>-->
        <div dir="ltr" class="position-fixed bg-dark text-white style-options" style="bottom:0;right: 0">
            <div>
                <button class="btn btn-sm btn-dark " @click.prevent="options.name_size++;refreshStyle()">n+</button>
                <button class="btn btn-sm btn-dark " @click.prevent="options.name_size--;refreshStyle()">n-</button>
                <button class="btn btn-sm btn-dark " @click.prevent="options.price_size++;refreshStyle()">p+</button>
                <button class="btn btn-sm btn-dark " @click.prevent="options.price_size--;refreshStyle()">p-</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [],
    data: function () {
        return {
            prices: {},
            categories: {},
            size: 10,
            options: {
                price_size: 20,
                name_size: 25,
            },
            product_style: {
                name_style: "",
                price_style: "",
            }

        };
    },
    methods: {
        getCategories() {
            let vm = this;
            axios.get("categories/categories")
                .then(res => {
                    console.log(res.data);
                    vm.categories = res.data.data;
                });
        },
        refreshStyle() {
            this.product_style = {
                name_style: "font-size: " + this.options.name_size + "px",
                price_style: "font-size: " + this.options.price_size + "px"
            }
        }

    },
    mounted() {
        this.getCategories();
        this.refreshStyle();
    }
}
</script>
<style scoped>
button {
    font-size: 10px;
    padding: 2px;
}


.discount-percent {
    position: absolute;
    top: -3px;
    left: -3px;
    height: 130px;
    width: 130px;
    overflow: hidden;
    /*background-color: white;*/
    z-index: 1000;
}

.discount-percent span {
    text-align: center;
    background-color: red;
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    display: inline-block;
    line-height: 35px;
    font-size: 20px;
    position: absolute;
    top: 30px;
    left: -40px;
    width: 170px;
    height: 35px;
    color: white;
    font-weight: 600;
    padding: 2px;
}
</style>
