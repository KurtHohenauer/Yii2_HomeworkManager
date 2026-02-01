
    /**
     * Makes an XMLHttpRequest to the teacher/create action
     * and populates a modal with the response.
     */
    function Teachercreate() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', '/teacher/create', true);

        xhr.onload = function () {
            $('#AjaxModalCreateTeacher').modal('show')
            $('#AjaxModalCreateTeacher .modal-title').html('<h2>Create Teacher</h2>')
            if (this.status >= 200 && this.status < 400) {
                // Assuming you have a modal with id="ajaxModal" in your view
                const modalBody = document.querySelector('#AjaxModalCreateTeacher .modal-body');
                if (modalBody) {
                    modalBody.innerHTML = this.responseText;

                    // You now need to show the modal.
                    // For example, by setting its display style:

                } else {
                    console.error('Could not find the modal body element for #ajaxModal.');
                    alert('Could not find the modal body element.');
                }
            } else {
                alert('An error occurred while loading the content. Status: ' + this.status);
            }
        };

        xhr.onerror = function () {
            // There was a connection error of some sort
            alert('An error occurred while loading the content.');
        };

        xhr.send();
    }
