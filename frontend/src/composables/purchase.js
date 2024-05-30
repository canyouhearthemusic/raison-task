import { ref } from "vue"
import axios from "@/axios.js"
import { useRouter } from "vue-router"

export default function useContacts() {
    const purchases = ref([])
    const purchase = ref([])
    const errors = ref([])
    const router = useRouter()

    const all = async () => {
        const response = await axios.get("/purchases")
        
        purchases.value = response.data
    }

    const store = async (data) => {
        try {
            await axios.post("/purchases", data)
            
            router.replace({
                name: "index"
            })
        } catch (error) {
            if(error.response.status === 422) {
                errors.value = error.response.data.errors
            }
        }
    }

    const update = async (id, data) => {
        try {
            await axios.patch(`/purchases/${id}`, purchase.value)
            
            router.push({
                name: "index"
            })
        } catch (error) {
            if(error.response.status === 422) {
                errors.value = error.response.data.errors
            }
        }
    }

    const destroy = async (id) => {
        if (!window.confirm('Are you sure?')) {
            return
        }

        await axios.delete(`/purchases/${id}`)

        await all()
    }

    return {
        purchases,
        errors,
        all,
        store,
        update,
        destroy
    }
}