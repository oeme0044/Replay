export default class Products {
    constructor() {
        this.data = {
            password: "Bnop1146"

        }

        this.rootElem = document.querySelector('.products');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.navnSearch = this.filter.querySelector('.navnSearch');
        this.processerSearch = this.filter.querySelector('.processerSearch');
    }

    async init(){
        this.navnSearch.addEventListener('input', () => {
            this.render();

        });


        this.processerSearch.addEventListener('input', () => {
            this.render();

        });




        await this.render();

    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3');

            col.innerHTML = `
                <div class="card h-100 text-white bg-dark itemsImg">
                    <img src="uploads/${item.prodImage}" class="card-img-top" alt="">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title text-white">${item.prodNavn}</h5>
                            <p class="text-muted mb-3">Fra ${item.prodPrismrd} kr/md.</p>
                            <p class="card-text p-1 text-white">${item.prodProcesser}</p>
                            <p class="card-text p-1 text-white">${item.prodGrafikkort}</p>
                            <p class="card-text p-1 text-white">${item.prodRam}</p>
                        </div>
                        <a href="muPage.php?rockId=${item.prodId}" 
                            class="btn btn-outline-light btn-floating btn-rounded w-100 mt-2">
                                 <i class="fas fa-info-circle">  See More</i>
                            
                        </a>
                    </div>
                </div>
                
                
                
                
            
            `;


            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row)


    }


    async getData (){


        this.data.navnSearch = this.navnSearch.value;
        this.data.grafikkortSearch = this.navnSearch.value;
        this.data.processerSearch = this.processerSearch.value;

        const response = await fetch('prodApi.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();

    }

}