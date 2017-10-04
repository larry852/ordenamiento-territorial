import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { MaterializeModule } from 'angular2-materialize'; /*Se declaro para usar Materialize */
import { HttpModule } from "@angular/http";
import { AppComponent } from './app.component';
import { DepartamentosComponent } from './departamentos.component';

import { RouterModule, Routes} from '@angular/router'; /*para enrutamiento de paginas*/
import { InicioComponent } from './inicio.component';
import { MunicipiosComponent } from './municipios.component';
import { EquipoComponent } from './equipo.component';
import { ZonasComponent } from './zonas.component';  

@NgModule({  
  declarations: [                /*aquí se declaran los componentes*/
    AppComponent, 
    DepartamentosComponent, 
    InicioComponent, 
    MunicipiosComponent, EquipoComponent, ZonasComponent
  ],
  imports: [
    BrowserModule,
    MaterializeModule,    /*Se declaro para usar Materialize */
    HttpModule,
    RouterModule.forRoot([
      {path: 'inicio', component:InicioComponent},
      {path: 'equipo', component:EquipoComponent},
      {path: 'departamentos', component:DepartamentosComponent},
      {path: 'municipios', component:MunicipiosComponent},
      {path: 'zonas', component:ZonasComponent}
      
      /*Se agregan los componentes a enlazar*/

    ])
  ],
  providers: [],
  bootstrap: [AppComponent]     /*aquí el componente Main Component */
})
export class AppModule { }
