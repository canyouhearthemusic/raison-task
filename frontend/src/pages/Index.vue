<script setup>
import AppLayout from "@/layouts/AppLayout.vue";
import Input from "@/components/ui/input/Input.vue";
import Button from "@/components/ui/button/Button.vue";
import { Pencil2Icon, TrashIcon } from "@radix-icons/vue";
import { RouterLink } from "vue-router";
import { ref, watch } from "vue";

const search = ref("")

watch(search, async (newValue) => {
    // TODO: Request
})
</script>

<template>
    <AppLayout>
        <div class="mx-24">
            <div class="flex justify-between items-center">
                <div class="flex gap-x-6">
                    <Input v-model="search" class="w-64" placeholder="Поиск по магазинам" />

                    <Button class="rounded-full"> Добавить </Button>
                </div>
                
                <select name="currency" id="currency">
                    <option value="">All</option>
                    <option value="usd">USD</option>
                    <option value="eur">EUR</option>
                    <option value="rub">RUB</option>
                </select>
            </div>

            <div class="mt-4 border rounded">
                <table class="table-fixed min-w-full">
                    <thead class="bg-gray-100 border-b">
                        <tr class="divide-x">
                            <th class="py-2">Магазин</th>
                            <th class="py-2">Дата</th>
                            <th class="py-2">Сумма</th>
                            <th class="py-2">Документ</th>
                            <th class="py-2">Действие</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">
                        <tr class="text-center divide-x">
                            <td class="text-blue-700 hover:underline py-3">
                                <RouterLink>
                                    amazon
                                </RouterLink>
                            </td>
                            
                            <td class="py-3">
                                01.01.2024
                            </td>
                            
                            <td class="py-3">
                                201.34 usd
                            </td>
                            
                            <td class="text-blue-700 hover:underline py-3">
                                <a href="">
                                    document.pdf
                                </a>
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
                    </tbody>

                    <!-- <div v-else></div> -->
                </table>
            </div>
        </div>
    </AppLayout>
</template>
