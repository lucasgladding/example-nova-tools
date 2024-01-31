<template>
    <div>
        <h1 class="font-normal text-xl mb-4">Lorem Ipsum</h1>
        <p class="mb-4">{{ text }}</p>
        <div class="flex gap-4">
            <Link @click="navigate('/')" class="text-primary-500">Back to main</Link>
        </div>
    </div>
</template>

<script setup>
defineProps({ text: String })

function navigate(path) {
    console.log('navigate', path)
    Nova.visit(path)
}
</script>

<style>
/* Scoped Styles */
</style>
