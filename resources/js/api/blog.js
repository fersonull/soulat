import { Alert } from "bootstrap";
import Support from "../Support";

// Support.loadFIrst(() => {
//     const form = Support.get('blogForm');

//     form?.addEventListener('submit', async (e) => {
//         e.preventDefault();

//         const formData = new FormData(form);
//         const token = document.querySelector('input[name="_token"]').value;

//         try {

//             const response = await fetch('/publish', {
//                 method: 'POST',
//                 headers: {
//                     'Accept': 'application/json',
//                     'X-CSRF-TOKEN': token
//                 },
//                 body: formData
//             })

//             const data = await response.json();

//             if (!response.ok) {
//                 const errCount = Object.keys(data.errors).length;

//                 if (errCount < 2) {
//                     Toastify({
//                         text: data.errors.content?.[0] || data.errors.title?.[0],
//                         duration: 2000,
//                         gravity: "top", 
//                         position: "right",
//                         backgroundColor: "#4caf50",
//                     }).showToast();
//                     return;
//                 }
                
//                 Toastify({
//                     text: 'Please provide a title and content.',
//                     duration: 2000,
//                     gravity: "top", 
//                     position: "right",
//                     style: {
//                         background: "#4caf50",
//                     },
//                 }).showToast();

//                 // console.log(data.errors.content?.[0])
//                 return;
//             }

//             Toastify({
//                 text: 'Post saved!',
//                 duration: 2000,
//                 gravity: "top", 
//                 position: "right",
//                 style: {
//                     background: "#4caf50",
//                 },
//             }).showToast();

//             console.log(data.post)

//         } catch (e) {
//             console.error(e)
//         }
//     })
// })