import { Injectable, importProvidersFrom } from '@angular/core';
import { BehaviorSubject } from 'rxjs';

interface Avisos{
  nombre: string;
  lugar: string;
  planeta: string;
  sistema: string;
}
@Injectable({
  providedIn: 'root'
})
export class ConectarService {

  private acusaciones = new BehaviorSubject<string[]>([]);
  avisosActuales = this.acusaciones.asObservable();
  constructor() { }

  agregarAviso(aviso: any){
    const avisosActuales = this.acusaciones.value;
    avisosActuales.push(aviso);
    this.acusaciones.next(avisosActuales);
  }
}
