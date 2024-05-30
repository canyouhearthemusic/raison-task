<script setup>
import AppLayout from "@/layouts/AppLayout.vue";
import { ref, watch } from "vue";
import { Select, SelectContent, SelectGroup, SelectItem, SelectTrigger, SelectValue, } from "@/components/ui/select";
import SearchBar from "@/components/SearchBar.vue";
import AddPurchaseDialog from "@/components/AddPurchaseDialog.vue";
import PurchaseTable from "@/components/PurchaseTable.vue";
import PurchaseRow from "@/components/PurchaseRow.vue";

const search = ref("");

const TABLE_HEADERS = ["Магазин", "Дата", "Сумма", "Документ", "Действие"]

watch(search, async (newValue) => {
    // TODO: Request
});
</script>

<template>
    <AppLayout>
        <div class="mx-24">
            <div class="flex justify-between items-center">
                <div class="flex gap-x-6">
                    <SearchBar/>

                    <AddPurchaseDialog/>
                </div>

                <Select>
                    <SelectTrigger class="max-w-28">
                        <SelectValue placeholder="Currency"/>
                    </SelectTrigger>

                    <SelectContent>
                        <SelectGroup>
                            <SelectItem value="apple"> USD</SelectItem>
                            <SelectItem value="banana"> EUR</SelectItem>
                            <SelectItem value="blueberry"> RUB</SelectItem>
                        </SelectGroup>
                    </SelectContent>
                </Select>
            </div>

            <PurchaseTable
                class="mt-4"
                :headers="TABLE_HEADERS"
            >
                <PurchaseRow />
            </PurchaseTable>
        </div>
    </AppLayout>
</template>
