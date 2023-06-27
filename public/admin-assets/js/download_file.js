function download_file_action(url, amount=0) {
    Swal.fire({
        title: "ফাইলটি ডাউনলোড করলে আপনার একাউন্ট থেকে "+ amount +" টাকা কর্তন করা হবে। আপনি কি ডাউনলোড করবেন?",
        // text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "হ্যাঁ",
        cancelButtonText: "না",
        confirmButtonClass: "btn btn-primary",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: false,
        icon: 'question',
        iconHtml : '<i class="bx bx-download"></i>',
    }).then(function (result) {
        if (result.value) {
            // $("#").attr("action", url).submit();
            axios.post(url)
                .then(res => {
                    // commit('CREATE_POST', res.data)
                    // console.log(res.data);
                    if(res.data.status == false){
                        toastr.error(res.data.message);
                    }else{
                        download(res.data.file_path);
                        toastr.success(res.data.message);
                    }
                }).catch(err => {
                // console.log(err)
                toastr.error("à¦•à§‹à¦¨à§‹ à¦¤à§à¦°à§à¦Ÿà¦¿ à¦¹à§Ÿà§‡à¦›à§‡, à¦†à¦¬à¦¾à¦° à¦šà§‡à¦·à§à¦Ÿà¦¾ à¦•à¦°à§à¦¨");
            });
        }
    });
}


function download(file_path) {
    const link = document.createElement("a");
    link.href = file_path;
    link.download = file_path;
    link.click();
}
