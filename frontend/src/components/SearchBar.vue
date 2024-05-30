<script setup>
import { ref, watch } from "vue";
import Input from "@/components/ui/input/Input.vue";

const search = ref("");

watch(search, async (newValue) => {
    // TODO: Request
});
</script>

<template>
    <Input class="w-64" placeholder="Поиск по магазинам" />
</template>
