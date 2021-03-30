export type VehicleMark = {
    id: string
    name: string
    logotype: string|null
}

export type VehicleModel = {
    id: string
    name: string
    mark_id: string
}

export type VehicleType = {
    id: string
    name: string
    alias: string
}

export type VehicleAttribute = {
    id: string
    name: string
}

export type VehicleBodyType = VehicleAttribute

export type VehicleEngineType = VehicleAttribute

export type VehicleTransmissionType = VehicleAttribute

export type VehicleDrivingWheelsType = VehicleAttribute

export type VehicleSteeringWheelType = VehicleAttribute
