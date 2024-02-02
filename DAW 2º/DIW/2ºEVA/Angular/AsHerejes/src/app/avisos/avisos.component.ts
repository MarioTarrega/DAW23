import { Component, Output, EventEmitter } from '@angular/core';

import { ConectarService } from '../conectar.service';

@Component({
  selector: 'app-avisos',
  templateUrl: './avisos.component.html',
  styleUrl: './avisos.component.css',

})
export class RegistroAvisosComponent {
  constructor(private conectarService: ConectarService) {}

  nombreAcusado: string = '';
  lugarResidencia: string = '';
  planeta: string = '';
  sistemaPlanetario: string = '';

  registrarAviso() {
    const aviso = {
      nombre: this.nombreAcusado,
      lugar: this.lugarResidencia,
      planeta: this.planeta,
      sistema: this.sistemaPlanetario
    };

    this.conectarService.agregarAviso(aviso);

    // Limpiar los campos después de agregar el aviso
    this.nombreAcusado = '';
    this.lugarResidencia = '';
    this.planeta = '';
    this.sistemaPlanetario = '';
  }
}
