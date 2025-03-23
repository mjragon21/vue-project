import $ from "jquery";
import { onMounted } from "vue";

onMounted(() => {
    $(document).ready(function () {
        $("#employeeTable").DataTable({
            responsive: true,
            searching: true,
            pagingType: "full_numbers"
        });
    });
});
