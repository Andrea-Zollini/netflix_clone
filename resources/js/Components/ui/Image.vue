<script setup>
const props = defineProps({
    src: {
        type: String,
    },
    alt: {
        type: String,
    },
    width: {
        type: String,
    },
    height: {
        type: String,
        default: "auto",
    },
});
</script>
<template>
    <img
        :src="props.src"
        :alt="props.alt"
        :width="props.width"
        :height="props.height"
    />
</template>
