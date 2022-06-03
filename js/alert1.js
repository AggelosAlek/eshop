function alreadyinCart(){
    Swal.fire({
        position: 'top',
        icon: 'warning',
        title: 'Already in Cart',
        showConfirmButton: false,
        timer: 1000
      })
}

function alreadyinWish(){
  Swal.fire({
      position: 'top',
      icon: 'warning',
      title: 'Already in Wishlist',
      showConfirmButton: false,
      timer: 1000
    })
}