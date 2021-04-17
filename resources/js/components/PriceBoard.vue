<template>
   <div>
       <div v-for="product in prices" class="d-inline-block border rounded h1 m-3 p-5">
           <div class="text-info">{{ product.name }}</div>
           <div class="text-danger">{{ product.price.toLocaleString() }} تومان</div>
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
