<template>
    <div>
        <h1 class="font-normal text-xl mb-4">Lorem Ipsum</h1>
        <p class="mb-4">{{ text }}</p>
        <Link href="/nova/lorem-ipsum/dolor-sit" class="text-primary-500">More info</Link>
    </div>
</template>

<script setup>
defineProps({ text: String })
</script>

<style>
/* Scoped Styles */
</style>
