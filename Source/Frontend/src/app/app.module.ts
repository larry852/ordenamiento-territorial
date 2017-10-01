import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { MaterializeModule } from 'angular2-materialize'; /*Se declaro para usar Materialize */
import { HttpModule } from "@angular/http";
import { AppComponent } from './app.component';
import { DepartamentosComponent } from './departamentos.component';

import { RouterModule, Routes} from '@angular/router';
import { InicioComponent } from './inicio.component';  /*para enrutamiento de paginas*/

@NgModule({  
  declarations: [                /*aquí se declaran los componentes*/
    AppComponent, 
    DepartamentosComponent, 
    InicioComponent
  ],
  imports: [
    BrowserModule,
    MaterializeModule,    /*Se declaro para usar Materialize */
    HttpModule,
    RouterModule.forRoot([
      {path:'departamentos', component:DepartamentosComponent},
      {path: 'inicio', component:InicioComponent}
      /*Se agregan los componentes a enlazar*/

    ])
  ],
  providers: [],
  bootstrap: [AppComponent]     /*aquí el componente Main Component */
})
export class AppModule { }
