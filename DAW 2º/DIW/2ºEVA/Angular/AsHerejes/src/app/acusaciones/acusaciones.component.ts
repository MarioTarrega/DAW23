import { Component, OnInit } from '@angular/core';
import { filter  } from 'rxjs/operators';

import { ConectarService } from '../conectar.service';
@Component({
  selector: 'app-acusaciones',
  templateUrl: './acusaciones.component.html',
  styleUrl: './acusaciones.component.css',
  
})
export class AcusacionesComponent implements OnInit {
  acusaciones: any[] = [];

  constructor(private conectarService: ConectarService) {}

  ngOnInit() {
    this.conectarService.avisosActuales.subscribe(nuevosAvisos => {
      // Filtrar los avisos con una sola acusación y asignar la lista
    });
  }
}
