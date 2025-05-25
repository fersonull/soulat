export default class Support {
    static previewImage(e) {
        console.log(e.target.files[0]);
        const file = e.target.files[0];
        const previewContainer = this.get('imageContainer');
        const preview = this.get('preview');
 
        if (file) {
            preview.src = URL.createObjectURL(file);
            previewContainer.style.display = 'block';
        } else {
            preview.src = '';
            previewContainer.style.display = 'none';
        }
    }


    static loadFIrst(callback) {
        document.addEventListener('DOMContentLoaded', (e) => {
            callback(e)
        })
    }

    static toast(message) {
        Swal.fire({
            toast: true,
            position: 'top-end',
            html: message,
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });
    }

    static get(elem) {
        return document.getElementById(elem);
    }

    static click(elem, callback) {
        this.get(elem)?.addEventListener('click', (e) => {
            callback(e)
        });
    }

    static submit(elem, callback) {
        this.get(elem)?.addEventListener('submit', () => {

        })
    }
}