import { NgModule } from '@angular/core';
import { BrowserModule, provideClientHydration } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AvisosComponent } from './avisos/avisos.component';
import { FormsModule } from '@angular/forms';
import { AcusacionesComponent } from './acusaciones/acusaciones.component';


@NgModule({
  declarations: [
    AppComponent,
    AvisosComponent,
    AcusacionesComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [
    provideClientHydration()
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
