import $ from "jquery";
import "datatables.net";
import "datatables.net-responsive";
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
