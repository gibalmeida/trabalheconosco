import React, { useEffect, useRef } from "react";
import { veiculoProprioOptions } from "@/Options/veiculoProprioOptions";

export default function SelectVeiculoProprio({
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
            {veiculoProprioOptions.map((e, i) => <option value={e.value} key={i}>{e.label}</option>)}

        </select>
    );
}
