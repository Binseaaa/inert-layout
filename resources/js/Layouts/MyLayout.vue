<script setup>
    import { Link , usePage} from '@inertiajs/vue3';
    import { computed } from 'vue';

    const page = usePage()

    const user = computed(() => page.props.user[0].name || 'Guest')
    const tagline = computed(() => page.props.tagline)
</script>

<template>
    <div id="main-wrapper">
        <div id="sidebar" class="min-w-[300px] bg-gray-900 flex flex-col items-center">
            <div id="branding">
                <img src="../../../public/coke.png" alt="">
            </div>
            <div class="py-4 text-italic text-red-600"><span class="text-white">Welcome:</span> {{ user }}</div>
            <!-- <div class="py-4 text-italic text-red-600">{{ tagline }}</div> -->
            <nav class="flex flex-col gap-3 mt-4 w-full">
                <Link href="/" :class="{'bg-red-600' : $page.component == 'Landing'}">Home</Link>
                <Link href="/about" :class="{'bg-red-600' : $page.component == 'About'}">About</Link>
                <Link href="/products" :class="{'bg-red-600' : $page.component == 'Products'}">Products</Link>
                <Link href="/">Contact Us</Link>
            </nav>
        </div>
        <div id="content" class="flex flex-col flex-1">
            <div class="flex-1">
                <slot/>
            </div>
            <footer class="py-4 text-gray-500 text-center">
                Copyright &copy; 2024. Cock Softwares, Inc.
            </footer>
        </div>
    </div>
</template>

<style scoped>
    #main-wrapper {
        min-height: 100svh;
        display: flex;
    }
    #branding img {
        width: 200px;
        margin-top: 10px;
    }
    nav a {
        @apply py-4 text-gray-300 text-xl hover:bg-red-600 text-center
    }
</style>
