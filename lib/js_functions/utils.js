const utils = {

    test: function() {
        console.log('testing utils');
    },

    countDown: function(time, element, modal) {
        const intervalID = setInterval(() => {
            time = time - 1;
            element.textContent = `This message will close in ${time}`;

            if(time == 0) {
                $('#create_session_modal').modal('hide');
                this.hideModal(modal);
                clearInterval(intervalID);
                element.textContent = '';
            }
        }, 1000);
    },

    hideModal: function(modal) {
        $(modal).modal('hide');
    },
    
    // Updates the message box after creating/updating
    updateMessageBox: function(modal, status, isEdit) {
        const success = status == 'success' ? true : false;
        const messageBox = modal.querySelector('.msg_box');
        messageBox.classList.remove('d-none');
        messageBox.querySelector('.alert').classList.add(success ? 'alert-success' : 'alert-danger');
        messageBox.querySelector('strong#status').textContent = success ? 'Success!' : 'Failed!';
        const msgElement = messageBox.querySelector('span#msg');
        status == 'success' ? utils.countDown(6, msgElement, modal) : '';
        msgElement.textContent = success ? `Successfully ${isEdit ? 'modified' : 'created'}.` : 'The operation failed'
    },

    clearModal: function(messageBox) {
        messageBox.querySelector('strong').textContent = '';
        messageBox.querySelector('.alert').classList.remove('alert-success');
        messageBox.querySelector('.alert').classList.remove('alert-danger');
        messageBox.classList.add('d-none');
    },

    createSelElement: function(selElement, data, name) {
        selElement.innerHTML = '';
        for (var i = 0; i < data.length; i++) {
            let option = document.createElement('option');
            option.id = data[i].id;
            option.value = data[i].id;
            option.textContent = data[i][name];

            $(selElement).append(option);
        }

    }
}