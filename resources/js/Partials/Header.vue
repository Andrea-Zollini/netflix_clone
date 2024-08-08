<template>
    <header class="">
        <nav class="flex items-center justify-between p-6" aria-label="Global">
            <div class="flex lg:flex-1">
                <a :href="route('home')" class="-m-1.5 p-1.5">
                    <Image
                        src="/logo_ex.png"
                        :alt="'Logo'"
                        :width="'120px'"
                        :Height="'80px'"
                        class="-my-6 -px-6"
                    />
                </a>
            </div>
            <div class="flex lg:hidden">
                <button
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400"
                    @click="mobileMenuOpen = true"
                >
                    <span class="sr-only">Open main menu</span>
                    <Bars3Icon class="w-6 h-6" aria-hidden="true" />
                </button>
            </div>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <Link
                    :href="route('login')"
                    class="inline-block px-6 py-2 font-bold text-white transition duration-300 bg-red-600 rounded-lg shadow-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50"
                >
                    Entra
                </Link>
            </div>
        </nav>
        <Dialog
            class="lg:hidden"
            @close="mobileMenuOpen = false"
            :open="mobileMenuOpen"
        >
            <div class="fixed inset-0 z-10" />
            <DialogPanel
                class="fixed inset-y-0 right-0 z-10 w-full px-6 py-6 overflow-y-auto bg-[#141414] sm:max-w-sm sm:ring-1 sm:ring-white/10"
            >
                <div class="flex items-center justify-between">
                    <a :href="route('home')" class="-m-1.5 p-1.5">
                        <Image
                            src="/logo_ex.png"
                            :alt="'Logo'"
                            :width="'120px'"
                            :Height="'80px'"
                            class="-my-6 -px-6"
                        />
                    </a>
                    <button
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-400"
                        @click="mobileMenuOpen = false"
                    >
                        <span class="sr-only">Close menu</span>
                        <XMarkIcon class="w-6 h-6" aria-hidden="true" />
                    </button>
                </div>
                <div class="flow-root mt-6">
                    <div class="-my-6 divide-y divide-gray-500/25">
                        <div class="py-6">
                            <Link
                                :href="route('login')"
                                class="inline-block px-6 py-2 font-bold text-white transition duration-300 bg-red-600 rounded-lg shadow-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50"
                            >
                                Entra
                            </Link>
                        </div>
                    </div>
                </div>
            </DialogPanel>
        </Dialog>
    </header>
</template>

<script setup>
import { ref } from "vue";
import { Dialog, DialogPanel } from "@headlessui/vue";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline";
import { Link } from "@inertiajs/vue3";
import Image from "@/Components/ui/Image.vue";

const mobileMenuOpen = ref(false);
</script>
