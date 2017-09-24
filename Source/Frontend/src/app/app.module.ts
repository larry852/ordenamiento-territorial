import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { MaterializeModule } from 'angular2-materialize'; /*Se declaro para usar Materialize */


import { AppComponent } from './app.component';

@NgModule({  
  declarations: [                /*aquí se declaran los componentes*/
    AppComponent
  ],
  imports: [
    BrowserModule,
    MaterializeModule            /*Se declaro para usar Materialize */
  ],
  providers: [],
  bootstrap: [AppComponent]     /*aquí el componente Main Component */
})
export class AppModule { }
