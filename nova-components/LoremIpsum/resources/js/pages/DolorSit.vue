<template>
    <div>
        <h1 class="font-normal text-xl mb-4">Dolor Sit</h1>
        <p class="mb-4">{{ text }}</p>
        <div class="flex gap-4">
            <Link href="/nova/lorem-ipsum" class="text-primary-500">Back to lorem ipsum</Link>
        </div>
    </div>
</template>

<script setup>
defineProps({ text: String })
</script>

<style>
/* Scoped Styles */
</style>
