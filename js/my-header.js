import styles from "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" assert { type: "css" };
export class myHeader extends HTMLElement{
    constructor(){
        super();
    }
    async components(){
        return await (await fetch("../views/my-header.html")).json()
    }
    connectedCallback() {
        document.adoptedStyleSheets.push(styles);
        console.log(this.components());
        // this.innerHTML=``;
    }
}

customElements.define("my-header",myHeader);