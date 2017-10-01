import { Component } from '@angular/core';


@Component({ 
  selector: 'app-root',                 /*nombre del componente que se llama desde el index.html */
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {             /* Para el componente sea exportado */
  title = 'app';                        /*Nombre que se puede llamar {{title}} desde otro lugar, por ej. Se llama interpolación*/

  


}
