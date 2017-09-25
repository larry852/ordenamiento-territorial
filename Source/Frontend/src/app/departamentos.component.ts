import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-departamentos',
  templateUrl: './departamentos.component.html',
  styles: [`
  
  
  * {
    border: 1px solid red;
    
  }

  
  `] /* el style es para la maquetación, quitar para producción */
})
export class DepartamentosComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}
