var Example = function (Glide, Components, Events) {
    return {
      modify (translate) {
        return translate - 0
      }
    }
  }
new Glide('.glide')
.mutate([Example])
.mount()