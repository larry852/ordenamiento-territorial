import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { MaterializeModule } from 'angular2-materialize'; /*Se declaro para usar Materialize */
import { HttpModule } from "@angular/http";
import { AppComponent } from './app.component';
import { DepartamentosComponent } from './components/departamentos.component';
import { TitleCasePipe } from './pipes/title-case.pipe';
import { CapitalizePipe } from './pipes/capitalize.pipe';
import { NullPipe } from './pipes/null.pipe';
import { Department} from './pipes/department.pipe';
import { Zones} from './pipes/zones.pipe';
import { FormsModule } from '@angular/forms';
import { LOCALE_ID } from '@angular/core';
import { RouterModule, Routes} from '@angular/router'; /*para enrutamiento de paginas*/
import { InicioComponent } from './components/inicio.component';
import { MunicipiosComponent } from './components/municipios.component';
import { EquipoComponent } from './components/equipo.component';
import { ZonasComponent } from './components/zonas.component';




@NgModule({  
  declarations: [                /*aquí se declaran los componentes*/
    AppComponent,     
    TitleCasePipe,
    CapitalizePipe,
    NullPipe,
    Zones,
    Department,
    DepartamentosComponent, 
    InicioComponent, 
    MunicipiosComponent, EquipoComponent, ZonasComponent
  ],
  imports: [
    BrowserModule,
    MaterializeModule,    /*Se declaro para usar Materialize */
    HttpModule,
    FormsModule,
    RouterModule.forRoot([
      {path: '', component:InicioComponent},
      {path: 'equipo', component:EquipoComponent},
      {path: 'departamentos', component:DepartamentosComponent},
      {path: 'municipios/:idDepartment', component:MunicipiosComponent},
      {path: 'zonas/:idCity', component:ZonasComponent}
      
      /*Se agregan los componentes a enlazar*/

    ])
  ],
  providers: [ { provide: LOCALE_ID, useValue: "UTC" },],
  bootstrap: [AppComponent]     /*aquí el componente Main Component */
})
export class AppModule { }

