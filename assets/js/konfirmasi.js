    function hapusMenu(){
        Swal.fire({
            title: "Are you sure?",
                text: "Yakin ingin hapus menu",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButoonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value) {
                document.location.href = url;
            }
        })
    }

    function hapusRole(){
        Swal.fire({
            title: "Are you sure?",
                text: "Yakin ingin hapus role",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButoonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value) {
                document.location.href = url;
            }
        })
    }

    function hapuSubmenu(){
        Swal.fire({
            title: "Are you sure?",
                text: "Yakin ingin hapus submenu",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButoonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value) {
                document.location.href = url;
            }
        })
    }






