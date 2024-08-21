<script setup>
import Container from "@/Components/ui/Container.vue";
import Image from "@/Components/ui/Image.vue";
</script>

<template>
    <div
        class="bg-[url('/hero.jpg')] bg-cover bg-center relative z-0 h-[770px]"
    >
        <div
            id="mask"
            class="absolute top-0 left-0 z-0 w-full h-full bg-black opacity-60"
        ></div>
        <Container class="relative z-10">
            <div>
                <Image
                    src="/logo_ex.png"
                    alt="logo"
                    width="170"
                    height="40"
                    class="-mt-3"
                />
            </div>
            <div class="flex justify-center">
                <div class="bg-black/60"></div>
            </div>
        </Container>
    </div>
</template>
