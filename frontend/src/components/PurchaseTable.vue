<script setup>
import PurchaseRow from "./PurchaseRow.vue";

const props = defineProps({
    headers: Array
})
</script>

<template>
    <div class="border rounded">
        <table class="table-fixed min-w-full">
            <thead class="bg-gray-100 border-b">
                <tr class="divide-x">
                    <th class="p-2" v-for="header in headers"> {{ header }} </th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <slot />
            </tbody>
        </table>
    </div>
</template>
