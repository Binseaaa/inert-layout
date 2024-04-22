<script setup>
    import MyLayout from '@/Layouts/MyLayout.vue';

    defineOptions({
        layout: MyLayout
    })
    const props = defineProps({
        user: Array
    })
</script>

<template>
    <div>
        <h1 class="text-4xl p-5">About Us</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div v-for="u in user" :key="u.id" class="bg-white rounded-lg shadow-lg p-6">
                <h1 class="text-xl font-semibold">{{ u.name }}</h1>
                <p class="text-gray-500 mt-2">{{ u.email }}</p>
                <p class="text-gray-500 mt-2">Created At: {{ new Date(u.created_at).toLocaleDateString() }}</p>
            </div>
        </div>
    </div>
</template>

