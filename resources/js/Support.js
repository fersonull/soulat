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

    static get(elem) {
        return document.getElementById(elem)
    }
}