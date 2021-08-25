import React, { useEffect, useRef } from "react";
import { estadoCivilOptions } from "@/Options/estadoCivilOptions";

export default function SelectEstadoCivil({
    id,
    name,
    value,
    placeholder,
    className,
    autoComplete,
    required,
    isFocused,
    handleChange,
}) {
    const input = useRef();

    useEffect(() => {
        if (isFocused) {
            input.current.focus();
        }
    }, []);

    return (
        <select
            id={id}
            name={name}
            value={value}
            className={`peer block w-full ` + (className ? className : "")}
            ref={input}
            autoComplete={autoComplete}
            placeholder={placeholder}
            required={required}
            onChange={(e) => handleChange(e)}
        >
            <option value="">Selecione...</option>
            {estadoCivilOptions.map((e, i) => <option value={e.value} key={i}>{e.label}</option>)}

        </select>
    );
}
