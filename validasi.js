function validateForm() {
    const namaInput = document.forms["formTebak"]["nama_user"].value.trim();
    const regexNama = /^[A-Za-z\s]+$/;

    if (namaInput === "") {
        alert("Nama tidak boleh kosong.");
        return false;
    }

    if (!regexNama.test(namaInput)) {
        alert("Nama hanya boleh berisi huruf dan spasi.");
        return false;
    }

    return true;
}
