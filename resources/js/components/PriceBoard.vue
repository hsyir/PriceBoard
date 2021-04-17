<template>
    <div class="row">
        <div v-for="product in prices" class="col-md-3  p-1">
            <div class=" border rounded p-1">
                <div class="text-primary p-1 h1">{{ product.name }}</div>
                <div class="text-danger p-1 h2">{{ product.price.toLocaleString() }} تومان</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [],
    data: function () {
        return {
            prices: {}
        };
    },
    methods: {
        getPrices() {
            let vm = this;
            axios.get("products/priceBoard")
                .then(res => {
                    console.log(res.data);
                    vm.prices = res.data.data;
                });
        }
    },
    mounted() {
        this.getPrices();
    }
}
</script>
