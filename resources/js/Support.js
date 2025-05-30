export default class Support {
    static previewImage(e) {
        console.log(e.target.files[0]);
        const file = e.target.files[0];
        const previewContainer = this.get('imageContainer');
        const partial = this.get('imagePartial');
        const icon = this.get('error-icon');
        const preview = this.get('preview');
 
        if (file) {
            preview.src = URL.createObjectURL(file);
            previewContainer.style.display = 'block';
            partial.style.display = 'none';
        } else {
            preview.src = '';
            previewContainer.style.display = 'none';
            previewContainer.style.display = 'block';
        }
    }


    static loadFIrst(callback) {
        document.addEventListener('DOMContentLoaded', (e) => {
            callback(e)
        })
    }

    static toast(message) {
        return Swal.fire({
            toast: true,
            position: 'top-end',
            html: message,
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                popup: 'toast-modal'
            }
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