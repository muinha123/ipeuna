const Utils = {

    sucess (app, message = "Dados salvo com sucesso!") {
        app.$toast.open({
            message: message,
            type: 'success',
            position: 'top-right'
        });
    },

    error (app, message = "Ops, aconteceu algum problema!") {
        app.$toast.open({
            message: message,
            type: 'error',
            position: 'top-right'
        });
    },

    fileExtVerify: function (file, extension = null, app) {
        if (file) {
            const ext = file.name.split('.').pop();
            if(extension != null && !extension.test(ext)) {
                this.error(app, 'Arquivo não suportado');
                return '';
            }

            return ext;
        }
    },

    convertFileToBase64 (file) {
        return new Promise((resolve) => {
            const reader = new FileReader();

            reader.onload = result => {
                const base64 = result.currentTarget.result.split('base64,');

                resolve({
                    extension: file.name.split('.').pop(),
                    source: base64[1],
                });
            }

            reader.readAsDataURL(file);
        });
    },

}

export default Utils;
