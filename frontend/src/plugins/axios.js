import axios from 'axios'

axios.defaults.headers = {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
}
axios.defaults.withXSRFToken = true

axios.defaults.baseURL = 'http://localhost:9090/api/v1'

export default axios