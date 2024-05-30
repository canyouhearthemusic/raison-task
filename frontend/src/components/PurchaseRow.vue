<script setup>
import { RouterLink } from "vue-router";
import { Pencil2Icon, TrashIcon } from "@radix-icons/vue";

const props = defineProps({
    row: Object
})
</script>

<template>
    <tr class="text-center divide-x">
        <td class="text-blue-700 hover:underline py-3">
            amazon
        </td>
        <td class="py-3">01.01.2024</td>
        <td class="py-3">201.34 usd</td>
        <td class="text-blue-700 hover:underline py-3">
            <a href=""> document.pdf </a>
        </td>
        <td>
            <div class="flex justify-center gap-x-3">
                <RouterLink>
                    <Pencil2Icon class="text-blue-600" />
                </RouterLink>
                <RouterLink>
                    <TrashIcon class="text-red-500" />
                </RouterLink>
            </div>
        </td>
    </tr>
</template>
