<template>
    <span dir="ltr">
        <VueClock />
    </span>
</template>
<script>

import VueClock from '@dangvanthanh/vue-clock';

export default {
    components: { VueClock },
    data () {
        return {
            time: '10:40'
        }
    }
}
</script>
