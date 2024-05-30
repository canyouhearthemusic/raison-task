<script setup>
import Input from "@/components/ui/input/Input.vue";
import Button from "@/components/ui/button/Button.vue";
import { Label } from "@/components/ui/label";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle, DialogTrigger } from "@/components/ui/dialog";
import {
    Select,
    SelectContent,
    SelectGroup,
    SelectItem,
    SelectTrigger,
    SelectValue
} from "@/components/ui/select/index.js";
</script>

<template>
    <Dialog>
        <DialogTrigger>
            <Button class="rounded-full"> Добавить</Button>
        </DialogTrigger>

        <DialogContent class="sm:max-w-[425px]">
            <DialogHeader class="my-4">
                <DialogTitle class="text-center">Добавить покупку</DialogTitle>
            </DialogHeader>
            <div class="grid gap-4 py-4">
                <div class="grid grid-cols-4 items-center gap-4">
                    <Label for="store_name" class="text-right">Магазин</Label>
                    <Input id="store_name" class="col-span-3"/>
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <Label for="date" class="text-right">Дата</Label>
                    <Input type="date" id="date" class="col-span-3"/>
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <Label for="purchase_amount" class="text-right">Сумма</Label>
                    <div class="flex">
                        <Input id="purchase_amount" class="col-span-3 rounded-r-none w-max" type="number"/>

                        <Select>
                            <SelectTrigger
                                class="min-w-[96px] rounded-l-none"
                            >
                                <SelectValue
                                    placeholder="Currency"
                                />
                            </SelectTrigger>

                            <SelectContent>
                                <SelectGroup>
                                    <SelectItem value="apple">
                                        USD
                                    </SelectItem>
                                    <SelectItem value="banana">
                                        EUR
                                    </SelectItem>
                                    <SelectItem
                                        value="blueberry"
                                    >
                                        RUB
                                    </SelectItem>
                                </SelectGroup>
                            </SelectContent>
                        </Select>
                    </div>
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <Label for="thumbnail" class="text-right">Вложение</Label>
                    <Input type="file" id="thumbnail" class="col-span-3"/>
                </div>
            </div>
            <DialogFooter class="min-w-full">
                <Button class="w-full" type="submit"> Добавить</Button>
            </DialogFooter>
        </DialogContent>
    </Dialog>
</template>

