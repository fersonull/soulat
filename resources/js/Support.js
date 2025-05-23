export default class Support{
    static previewImage(e) {
        console.log(e.target.files[0]);
        const file = e.target.files[0];
        const previewContainer = this.get('imageContainer');
        const preview = this.get('preview');

        const reader = new FileReader();
        reader.onload = function (e) {
            previewContainer.classList.remove('hidden')
            preview.src = e.target.result;
            // preview.classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    }

    static get(elem) {
        return document.getElementById(elem)
    }
}