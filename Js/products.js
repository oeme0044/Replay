export default class Products {
    constructor() {
        this.data = {
            password: "1234"

        }

        this.rootElem = document.querySelector('.products');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.trackSearch = this.filter.querySelector('.trackSearch');
        this.releaseSearch = this.filter.querySelector('.releaseSearch');

        this.render();

    }









    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3');

            col.innerHTML = `
            <div class="container">   
                <div class="card-body-products text-center">
                    <img src="uploads/${item.prodImage}" class="card-img-top" alt="">
                    <h5 class="card-title text-black">${item.prodNavn}</h5>
                    <p class="text-muted mb-3">Fra ${item.prodPrismrd} kr/md.</p>
                    <p class="card-text p-1 text-black">${item.prodProcesser}</p>
                    <p class="card-text p-1 text-black">${item.prodGrafikkort}</p>
                    <p class="card-text p-1 text-black">${item.prodRam}</p>
                    <a href="#" class="btn m-5 btn-primary text-white border-white">Se Mere</a>
                </div>
            </div>   

                
                
                
                
            
            `;


            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row)


    }


    async getData (){


        //this.data.trackSearch = this.trackSearch.value;
        //this.data.artistSearch = this.trackSearch.value;
        //this.data.releaseSearch = this.releaseSearch.value;

        const response = await fetch('prodApi.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();

    }

}